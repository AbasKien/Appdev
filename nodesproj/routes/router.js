const express= require('express');
const router= express.Router();
const main = require ('../controller/kiencon');
router.get('/index.html', main.index)
router.get('/wishlist.html', main.wishlist)
router.get('/about.html', main.about)
router.get('/contact.html', main.contact)
router.get('/shop.html', main.shop)
router.get('/blog.html', main.blog)
router.get('/product-single.html', main.singleprod)
router.get('/cart.html', main.cart)
router.get('blog-single.html', main.blogsingle)
router.get('/checkout.html', main.checkout)

module.exports= router;