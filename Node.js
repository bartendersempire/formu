const express = require('express');
const app = express();
const port = 3000;
app.use(express.json());
app.use(express.static('public'));  // Diretório para arquivos estáticos

let usuarios = [];

// Endpoint para salvar os dados
app.post('/salvar', (req, res) => {
    const { nome, numero } = req.body;
    usuarios.push({ nome, numero });
    res.send('Dados salvos');
});

// Endpoint para pegar os dados
app.get('/dados', (req, res) => {
    res.json(usuarios);
});

app.listen(port, () => {
    console.log(`Servidor rodando em http://localhost:${port}`);
});
