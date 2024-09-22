const main ={
index:(req, res) => {
   res.render('index');
},
home:(req, res) => {
    res.render('home');
 },
 lala:(req, res) => {
    res.render('lala');
 },
 po:(req, res) => {
    res.render('po');
 },
 ki:(req, res) => {
    res.render('ki');
 },
};
module.exports= main;