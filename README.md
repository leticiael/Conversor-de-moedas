# Conversor de Moedas e Visualizador de Cotações

Este projeto é uma aplicação web com duas funcionalidades principais: a conversão de valores entre diferentes moedas e a visualização das principais cotações do dia. Desenvolvido em PHP, HTML e CSS, oferece uma interface simples e intuitiva para usuários realizarem conversões monetárias e consultarem cotações atuais.

## Características

- **Conversão de Moedas:** Permite aos usuários inserir um valor em Reais (BRL) para converter em várias outras moedas (USD, EUR, GBP, JPY, CAD) utilizando taxas de câmbio atualizadas.

- **Visualização de Cotações:** Exibe as principais cotações do dia para as moedas disponíveis, proporcionando uma visão geral das taxas de câmbio atuais.

## Tecnologias Utilizadas

- **PHP:** Linguagem de programação server-side utilizada para realizar requisições à API de taxas de câmbio e processar as conversões.

- **HTML:** Estrutura as páginas web.

- **CSS:** Estiliza as páginas, incluindo layouts responsivos que se adaptam a diferentes tamanhos de tela.

- **API de Taxas de Câmbio:** Fornece as taxas de câmbio atualizadas utilizadas nas conversões e na visualização das cotações.

## Como Usar

### 1. Conversão de Moedas:

   - Abra a página de conversão de moedas.
   - Insira o valor em Reais (BRL) que deseja converter.
   - Clique no botão "Converter" para ver o valor convertido nas moedas disponíveis (USD, EUR, GBP, JPY, CAD).

### 2. Visualização de Cotações:

   - Abra a página de cotações para ver as principais taxas de câmbio do dia.
   - As cotações são exibidas em uma interface simples, mostrando quanto 1 Real (BRL) vale nas moedas disponíveis.
   - Use os botões "Fazer conversão" para acessar rapidamente a ferramenta de conversão de moedas com a moeda selecionada.

   **Página de Conversão**
   ![Página de Conversão](src/img/paginaconversao.png)

   **Página de Cotações**
   ![Página de Cotações](src/img/paginacotacao.png)

## Configuração Necessária

- É necessário possuir um servidor PHP para rodar a aplicação.
- Configurar o arquivo `config.php` com sua chave de API para a consulta de taxas de câmbio.

## Desenvolvimento e Contribuições

- **Criação e Desenvolvimento:** Letícia Eltermann
- Contribuições são bem-vindas. Para contribuir, por favor, crie um fork do projeto, faça suas alterações e envie um pull request.

## Licença

Este projeto é distribuído sob a licença MIT.
