/* eslint-disable linebreak-style */
import express from 'express';
import { loginUser, registerUser } from '../controllers/authController.js';

const router = express.Router();

export default router;

router.get('/register', registerUser);

router.get('/register', loginUser);
