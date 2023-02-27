# buscador-top-noticias
Crawler que busca e retorna as postagens de maior relevância do dia, utilizando o agregador social Reddit

## 🔨 Funcionalidades do projeto
    Este  é um crawler simples que utiliza um *subreddit* voltado para noticias mundiais chamado */r/WorldNews* . O objetio dele é encontrar as postagens mais relevantes do dia e exibir os títulos das notícias encontradas.

## ✔️ Instalação
    Para utilizar o crawler, é necessário ter o PHP 8.2 ou acima instalado no seu computador. Além disso, você precisará instalar o pacote via Composer:

```console
composer require bibitelles/buscador-top-noticias
```
## 📁 Acesso
    Você pode acessar os arquivos do projeto clicando [aqui](https://github.com/bibitelles/buscador-top-noticias).

##  💡 Personalização

    Este crawler foi criado para buscar notícias em um site específico, mas é possível personalizá-lo para buscar notícias em outros sites. Para isso, basta alterar a URL do site através do parâmetro $sourceUrl. 

## 🛠️ Abrir e rodar o projeto
    Para abrir e rodar o crawler, basta executar o arquivo **buscador-top-notícias.php** - Ele buscará as notícias no site especificado no código e exibirá os títulos encontrados no terminal.