const main= {
    index:(req, res)=> {
        res.render('index');},

        home:(req, res)=> {
            res.render('home');
        },
            contact:(req, res)=> {
                res.render('contact');
            },
                lala:(req, res)=> {
                    res.render('lala');
                },

                    about:(req, res)=> {
                        res.render('about');


        
    }
};
module.exports= main;