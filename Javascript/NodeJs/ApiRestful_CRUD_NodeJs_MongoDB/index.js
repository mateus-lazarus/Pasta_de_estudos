// initial config
require('dotenv').config()
const express = require('express')
const mongoose = require('mongoose')
const app = express()


//const Person = require('./models/Person')

// way to read JSON
app.unsubscribe(
   express.urlencoded({
      extended: true
   })
)

app.use(express.json())


// initial endpoint
app.get('/', (req, res) => {
   // show the req
   console.log(req)

   // the response
   res.json({
      message: 'Hello Express!'
   })
})


// api endpoints
const personRoute = require('./routes/personRoutes')

app.use('/person', personRoute)


// database connection and application start
const DB_USER = process.env.DB_USER
const DB_PASSWORD = process.env.DB_PASSWORD 

mongoose
   .connect(
      `mongodb+srv://${DB_USER}:${DB_PASSWORD}@banconodejsmongoose.xhrowze.mongodb.net/?retryWrites=true&w=majority`
      )
   .then(() => {
      console.log('Sucessfully connected to Mongo Database')

      // specify the network port
      app.listen(3000)
   })
   .catch((err) => {
      console.log(err)
   })




