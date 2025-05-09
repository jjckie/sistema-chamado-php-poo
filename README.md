# Sistema de Chamados - MVC em PHP

Este projeto é um sistema simples de gerenciamento de chamados desenvolvido em PHP com orientação a objetos, utilizando o padrão de arquitetura MVC (Model-View-Controller). Ele foi criado com fins acadêmicos e simula a abertura e o controle de ordens de serviço tanto por clientes quanto por técnicos responsáveis pelo atendimento.

O sistema possui duas interfaces principais: a tela do cliente, onde é possível criar chamados informando código do cliente, descrição, prioridade e categoria; e a tela do técnico, onde é possível visualizar, editar, liberar ou excluir chamados. O status padrão dos chamados é "Aguardando", e pode ser alterado para "Liberado" pelo técnico. Todos os dados são armazenados em um banco MySQL, e cada chamado também registra automaticamente a data de abertura.

Para executar o projeto localmente, é necessário ter um servidor com suporte a PHP e MySQL (como XAMPP, WAMP ou Laragon). Basta importar o arquivo `sql_script.sql` no seu banco de dados para criar a estrutura necessária e configurar a conexão no arquivo `config/Database.php` com seu usuário, senha e host. As telas podem ser acessadas por meio dos parâmetros da URL, sendo `index.php?view=cliente` para a interface do cliente e `index.php?view=tecnico` para a do técnico.

Este sistema é ideal para estudos iniciais de POO com PHP, integração com banco de dados, manipulação de formulários e divisão de responsabilidades com o modelo MVC.
