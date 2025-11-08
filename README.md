💬 Sistema de Contato
📋 Descrição do Projeto

Sistema web de formulário de contato desenvolvido em PHP, HTML e CSS.
A aplicação permite que o usuário envie uma mensagem preenchendo nome, e-mail e texto, com validação dos campos e retorno visual informando se os dados foram enviados corretamente.

O projeto tem como objetivo demonstrar o uso de formulários em PHP, o envio de dados via método POST, e a validação de campos no lado do servidor.
É ideal para quem está aprendendo PHP básico e quer entender como capturar e validar informações de um formulário HTML.

✨ Funcionalidades

✅ Envio de mensagens através de um formulário interativo
✅ Validação de campos obrigatórios (nome, e-mail e mensagem)
✅ Verificação automática de formato de e-mail
✅ Mensagens de erro e sucesso exibidas dinamicamente
✅ Design moderno, colorido e com animação de fundo
✅ Totalmente responsivo para telas menores

🎨 Interface e Design

A interface foi construída com CSS3 e possui:

Fundo com degradê animado (vermelho, verde e preto)

Caixa de formulário centralizada com sombra e bordas arredondadas

Campos com efeito de foco (focus)

Botão com transição suave e animação de hover

Design limpo, elegante e adaptável a dispositivos móveis

🛠️ Tecnologias Utilizadas

HTML5 → Estrutura da página

CSS3 → Estilização e animações

PHP 7.4+ → Processamento e validação dos dados

XAMPP → Ambiente de desenvolvimento local

📁 Estrutura do Projeto
sistema-contato/
│
├── IMG/
│   └── contato.png          # Ícone usado como favicon
│
├── index.php                # Página principal com formulário e código PHP
└── README.md                # Documentação do projeto

⚙️ Requisitos do Sistema

XAMPP instalado (com Apache ativo)

PHP 7.4 ou superior

Navegador web moderno (Google Chrome, Edge, Firefox, etc.)

🚀 Instalação e Execução
🔧 1. Preparação do Ambiente

Instale o XAMPP, se ainda não tiver.

Inicie o Apache pelo painel de controle do XAMPP.

📂 2. Configuração do Projeto

Extraia os arquivos do projeto (caso estejam compactados).

Copie a pasta sistema-contato para o diretório:

C:\xampp\htdocs\


Verifique se o arquivo principal se chama index.php.

🌐 3. Executando o Projeto

Abra o navegador e acesse:

http://localhost/sistema-contato/


Preencha o formulário com:

Nome

E-mail

Mensagem

Clique em Enviar Mensagem e veja o retorno abaixo do formulário:

✅ Mensagem de sucesso, se todos os campos estiverem corretos

❌ Mensagem de erro, caso algum campo esteja vazio ou o e-mail seja inválido

🧠 Como o Sistema Funciona

O usuário preenche os campos do formulário e clica em Enviar.

O formulário é enviado via método POST para a mesma página.

O PHP valida:

Se os campos não estão vazios

Se o e-mail possui formato válido (filter_var())

Se tudo estiver certo, é exibida uma mensagem de sucesso personalizada com o nome do usuário.

Caso contrário, uma mensagem de erro orienta o que precisa ser corrigido.

🧩 Principais Aprendizados

Envio e tratamento de formulários com PHP

Uso do método POST

Validação de campos obrigatórios

Verificação de formato de e-mail (FILTER_VALIDATE_EMAIL)

Exibição dinâmica de mensagens com PHP embutido em HTML

Criação de layout moderno e animado com CSS

👨‍💻 Desenvolvedor

Pietro Miguel
Sistema desenvolvido como projeto didático para prática de PHP, HTML e CSS, com foco em validação de formulários e experiência do usuário.

📞 Suporte

Em caso de dúvidas ou erros:

Verifique se o Apache está ativo no XAMPP

Confirme se os arquivos estão na pasta correta (htdocs)

Certifique-se de que o arquivo principal é index.php

⭐ Contribua

Se este projeto te ajudou a aprender PHP e HTML/CSS, deixe uma estrela ⭐ no repositório e compartilhe com outros desenvolvedores iniciantes!
