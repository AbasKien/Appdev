const { checkout } = require("../routes/router");

const main ={
index:(req, res) => {
   res.render('index');
},
wishlist:(req, res) => {
    res.render('wishlist');
 },
 about:(req, res) => {
    res.render('about');
 },
 contact:(req, res) => {
    res.render('contact');
 },
 shop:(req, res) => {
    res.render('shop');
 },
 blog:(req, res) => {
   res.render('blog');
},
singleprod:(req, res) => {
   res.render('singleprod');
},
cart:(req, res) => {
   res.render('cart');

},
blogsingle:(req, res) => {
   res.render('blogsingle');
},

checkout:(req, res) => {
   res.render('checkout');
},

};
module.exports= main;