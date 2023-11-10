/* eslint-disable linebreak-style */
/* eslint-disable import/extensions */
import Hotel from '../models/Hotel.js';

/* eslint-disable import/extensions */
/* eslint-disable import/prefer-default-export */
export const createHotel = async (req, res, next) => {
  const newHotel = new Hotel(req.body);

  try {
    const savedHotel = await newHotel.save();
    res.status(200).json(savedHotel);
  } catch (error) {
    next(error);
  }
};

export const updateHotel = async (req, res, next) => {
  try {
    // Another option is to use. Therefore after find by id, the document is updated
    // and returned the newest version
    // const hotel = await Hotel.findByIdAndUpdate(req.params.id, { $set: req.body }, { new: true })

    const hotel = await Hotel.findById(req.params.id);

    hotel.updateOne(req.body);

    res.status(202).json(hotel);
  } catch (error) {
    next(error);
  }
};

export const deleteHotel = async (req, res, next) => {
  try {
    await Hotel.findByIdAndDelete(req.params.id);

    res.status(202).send(`Hotel ${req.params.id} has been deleted`);
  } catch (error) {
    next(error);
  }
};

export const getOneHotel = async (req, res, next) => {
  try {
    const hotel = await Hotel.findById(req.params.id);

    res.status(200).json(hotel);
  } catch (error) {
    next(error);
  }
};

export const getAllHotels = async (req, res, next) => {
  try {
    const hotelList = await Hotel.find();

    res.status(200).json(hotelList);
  } catch (error) {
    next(error);
  }
};
