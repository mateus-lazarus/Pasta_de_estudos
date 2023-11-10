/* eslint-disable linebreak-style */
/* eslint-disable import/extensions */
import express from 'express';
import {
  createHotel, updateHotel, deleteHotel, getOneHotel, getAllHotels,
} from '../controllers/hotelController.js';
import { verifyAdmin } from '../utils/verifyToken.js';

const router = express.Router();

export default router;

// Create
router.post('/', verifyAdmin, createHotel);

// Update
router.patch('/:id', verifyAdmin, updateHotel);

// Delete
router.patch('/:id', verifyAdmin, deleteHotel);

// Get One
router.get('/:id', getOneHotel);

// Get All
router.get('/', getAllHotels);
