/* eslint-disable linebreak-style */
/* eslint-disable import/extensions */
import User from '../models/User.js';

/* eslint-disable import/extensions */
/* eslint-disable import/prefer-default-export */
export const createUser = async (req, res, next) => {
  const newUser = new User(req.body);

  try {
    const savedUser = await newUser.save();
    res.status(200).json(savedUser);
  } catch (error) {
    next(error);
  }
};

export const updateUser = async (req, res, next) => {
  try {
    // Another option is to use. Therefore after find by id, the document is updated
    // and returned the newest version
    // const User = await User.findByIdAndUpdate(req.params.id, { $set: req.body }, { new: true })

    const user = await User.findById(req.params.id);

    user.updateOne(req.body);

    res.status(202).json(user);
  } catch (error) {
    next(error);
  }
};

export const deleteUser = async (req, res, next) => {
  try {
    await User.findByIdAndDelete(req.params.id);

    res.status(202).send(`User ${req.params.id} has been deleted`);
  } catch (error) {
    next(error);
  }
};

export const getOneUser = async (req, res, next) => {
  try {
    const user = await User.findById(req.params.id);

    res.status(200).json(user);
  } catch (error) {
    next(error);
  }
};

export const getAllUsers = async (req, res, next) => {
  try {
    const userList = await User.find();

    res.status(200).json(userList);
  } catch (error) {
    next(error);
  }
};
