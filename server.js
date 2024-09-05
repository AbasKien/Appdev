const http = require ('http');
const fs = require ('fs');

const server = http.createServer((req, res) => {
    console.log(req.url, req.method);
    
    res.setHeader ('Content-Type', 'text/html');
    let path = './views/';
    switch(req.url){
        case'/home':
        path += 'home.html';
        break;
        case'/about':
        path += 'about.html';
        break;
        case'/contact':
        path += 'contact.html';
        break;
        default:
    }
    fs.readFile(path, (err, data) => {
        if (err){
            console.log(err);
            res.end();
        }
        else{
            res.write(data);
            res.end();
        }
    })
})

server.listen(4000, 'localhost', () => {
    console.log('Listening req for port 4000')
})
