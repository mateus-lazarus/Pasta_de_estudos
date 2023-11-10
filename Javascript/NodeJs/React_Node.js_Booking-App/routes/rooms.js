/* eslint-disable linebreak-style */
import express from 'express';

const router = express.Router();

export default router;

router.get('/', (req, res) => {
  // res.status(200).json({message: "Hello, this is auth endpoint"})
  res.send('Hello, this is auth endpoint');
});
