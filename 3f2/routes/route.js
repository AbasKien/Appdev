const express= require ('express');
const router = express.Router();
const main= require('../controler/org');

router.get('/', main.index);
router.get('/home', main.home);
router.get('/contact', main.contact);
router.get('/lala', main.lala);
router.get('/about', main.about);
module.exports = router;