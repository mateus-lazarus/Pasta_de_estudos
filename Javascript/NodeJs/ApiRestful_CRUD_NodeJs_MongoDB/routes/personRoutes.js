const router = require('express').Router()
const Person = require('../models/Person')

router.post('/', async (req, res) => {
   // req.body expected as Person json || desconstruct
   const {name, salary, approved} = req.body

   if (!name || !salary || !approved) {
      res.status(400).json({message: 'Some required field was not fulfilled'})
      return
   }

   const person = {
      name,
      salary,
      approved
   }

   try {
      await Person.create(person)

      res.status(201).json({message: 'Person saved with success'})
   }
   catch (error) {
      res.status(421).json({error: error})
   }
})

router.get('/', async (req, res) => {
   try {
      const allPeople = await Person.find()

      res.status(200).json({
         pageIndex: 1,
         pageSize: allPeople.length,
         items: allPeople
      })
   }
   catch (error) {
      res.status(500).json({error: error})
   }
})

router.get('/:id', async (req, res) => {
   try {
      const id = req.params.id
      const person = await Person.findById({_id: id})

      res.status(200).json({person})
   }
   catch (error) {
      res.status(500).json({error: error})
   }
})

router.patch('/:id', async (req, res) => {
   const id = req.params.id

   if (!id) {
      res.status(400).json({message: 'Some required field was not fulfilled'})
      return
   }

   // req.body expected as Person json || desconstruct
   const {name, salary, approved} = req.body

   if (!name && !salary && !approved) {
      res.status(400).json({message: 'Some required field was not fulfilled'})
      return
   }

   const person = {
      name,
      salary,
      approved
   }

   try {
      console.log("BATEU TRY 1")
      try{
         console.log("BATEU TRY 2")
         const updatedPerson = await Person.updateOne({_id: id}, person)
      }
      catch (error)
      {
         console.log("BATEU CATCH 2")
         // if no person with that id was found
         res.status(422).json({message: `That person with id ${id} does not exist`})
         return
      }

      res.status(201).json({updatedPerson})
   }
   catch (error) {
      console.log("BATEU CATCH 1")
      res.status(421).json({error: error})
      return
   }
})

router.delete('/:id', async (req, res) => {
   try {
      if (!id) {
         res.status(400).json({message: 'Some required field was not fulfilled'})
         return
      }

      const id = req.params.id
      const person = await Person.deleteOne({_id: id})

      res.status(200).json({message: `The person ${id} was deleted with success`})
   }
   catch (error) {
      res.status(500).json({error: error})
   }
})

module.exports = router