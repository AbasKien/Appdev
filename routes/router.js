const express= require('express');
const router= express.Router();
const main = require ('../controller/kiencon');
router.get('/', main.index)
router.get('/home', main.home)
router.get('/lala', main.lala)
router.get('/po', main.po)
router.get('/ki', main.ki)
module.exports= router;