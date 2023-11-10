/* eslint-disable linebreak-style */
/* eslint-disable import/extensions */
import bcrypt from 'bcryptjs';
import jwt from 'jsonwebtoken';
import User from '../models/User.js';
import { createError } from '../utils/error.js';

export const registerUser = async (req, res, next) => {
  try {
    const salt = bcrypt.genSaltSync(10);
    const hash = bcrypt.hashSync(req.body.password, salt);

    const newUser = new User({
      username: req.body.username,
      email: req.body.email,
      password: hash,
    });

    await newUser.save();

    res.status(200).send('User has been created.');
  } catch (error) {
    next(error);
  }
};

export const loginUser = async (req, res, next) => {
  try {
    const user = User.findOne({ username: req.body.username });
    if (!user) {
      return next(createError(404, 'User not found!'));
    }

    const doesPasswordMatch = await bcrypt.compare(req.body.password, user.password);
    if (!doesPasswordMatch) {
      return next(createError(404, 'Password does not match!'));
    }

    // Create a JWT token for persistence
    const token = jwt.sign({ id: user.id, isAdmin: user.isAdmin }, process.env.JWT);

    // Send less information by desconstruct a object into parts
    const { password, isAdmin, ...notSecretFields } = user;

    res
      .cookie('access_token', token, {
        httpOnly: true,
      })
      .status(200)
      .json(...notSecretFields);
  } catch (error) {
    next(error);
  }
};
