/* eslint-disable linebreak-style */
/* eslint-disable import/extensions */
import express from 'express';
import {
  createUser, updateUser, deleteUser, getOneUser, getAllUsers,
} from '../controllers/userController.js';
import { verifyAdmin, verifyUser } from '../utils/verifyToken.js';

const router = express.Router();

export default router;


// // For testing the authentication and authorization
// // Authenticate User
// router.get('/checkauthentication', verifyToken, (req, res, next) => {
//   res.send('Hello user, you are logged in');
// });

// // Authorize User
// router.get('/checkuser/:id', verifyUser, (req, res, next) => {
//   res.send('Hello user, you are logged in and authorized for this');
// });

// // Authorize Admin
// router.get('/checkadmin/:id', verifyAdmin, (req, res, next) => {
//   res.send('Hello user, you are logged in and authorized for everything');
// });

// Create
router.post('/', verifyUser, createUser);

// Update
router.patch('/:id', verifyUser, updateUser);

// Delete
router.patch('/:id', verifyUser, deleteUser);

// Get One
router.get('/:id', verifyUser, getOneUser);

// Get All
router.get('/', verifyAdmin, getAllUsers);
