# 🐾 VetPatinhas - Sistema de Clínica Veterinária

> 🎓 **Aviso:** Este projeto foi desenvolvido para fins acadêmicos e não possui fins comerciais.

Sistema completo de gerenciamento para clínicas veterinárias. Desenvolvido com **PHP** e **MySQL**, o projeto permite o controle de agendamentos, cadastro de clientes e médicos, gerenciamento de estoque de medicamentos, envio e consulta de prontuários em PDF, além de áreas exclusivas para médicos e tutores.

---

## 🧩 Funcionalidades

- ✅ Cadastro e login de clientes e funcionários
- ✅ Verificação de tipo de usuário (cliente ou médico)
- ✅ Agendamento de serviços e exames
- ✅ Controle de horário com bloqueio de sobreposição
- ✅ Upload de prontuário em PDF por médicos
- ✅ Consulta de prontuários enviados pelos médicos
- ✅ Sistema de estoque de medicamentos com CRUD
- ✅ Calendário de agendamentos para médicos
- ✅ Área administrativa para médicos e tutores

---

## 📁 Estrutura do Projeto

```
VetPatinhas/
│
├── db/                       # Scripts SQL para criação do banco de dados
├── docs/                     # Documentações adicionais
├── src/                      # Código fonte principal do sistema
│   ├── adm/                  # Telas e lógicas do painel administrativo dos médicos
│   ├── connect/              # Conexão com o banco de dados e arquivos principais (ex: logout)
│   ├── cssAdm/               # Folhas de estilo da área administrativa
│   ├── cssIndex/             # Folhas de estilo da área dos clientes/tutor
│   ├── img/                  # Imagens e ícones usados no projeto
│   ├── Index/                # Telas de interface do cliente e home page
│   ├── js/                   # Scripts JavaScript (calendário, validações)
│   └── uploads/              # Pasta de destino dos prontuários (PDFs) enviados
│
├── .env                      # Variáveis de ambiente (ignorado no git)
├── iniciar.sh                # Script de inicialização rápida
└── README.md                 # Documentação do projeto
```

---

## 🧠 Tecnologias Utilizadas

O projeto foi construído utilizando um ecossistema sólido para garantir estabilidade e responsividade, empregando as seguintes tecnologias:

### ⚙️ Back-End e Banco de Dados
- **PHP**: Linguagem principal do servidor. O projeto foi construído de forma nativa (sem o uso de frameworks) para demonstrar o domínio de conceitos essenciais como controle de sessões, manipulação de arquivos de upload e lógica de negócios.
- **PDO (PHP Data Objects)**: Utilizado para garantir uma comunicação segura com o banco de dados, protegendo o sistema contra Injeções de SQL.
- **MySQL**: Banco de dados relacional responsável por armazenar os usuários, o controle complexo de estoque, prontuários e agendamentos de forma persistente.

### 🎨 Front-End e Interface Visual - Responsividade    
- **HTML5 & CSS3**: Estruturação semântica e estilização nativa para as áreas mais personalizadas da aplicação.
- **JavaScript (Vanilla)**: Utilizado em interações de tela, validações em tempo real, manipulações do DOM e controle do calendário.
- **Bootstrap 5**: Framework CSS empregado para garantir que todo o painel de controle e a interface do cliente sejam 100% responsivos e modernos, seja no celular ou no computador.
- **FullCalendar.io**: Biblioteca interativa conectada ao JavaScript e ao PHP para renderizar o calendário inteligente dos médicos de forma visual e funcional.

---

## 🎨 Paleta de Cores

| Cor       | Código    | Uso                         |
|------------|-----------|------------------------------|
| Verde      | `#6FCF97` | Confiança e saúde            |
| Laranja    | `#F2994A` | Destaques e energia          |
| Roxo       | `#9B51E0` | Inovação e cuidado           |
| Branco     | `#FFFFFF` | Limpeza e contraste          |
| Preto      | `#000000` | Texto, contrastes e detalhes |

---

## 🛠️ Requisitos para rodar localmente

- PHP 8 ou superior (com extensão `php-mysql`)
- Banco de dados MySQL
- **MySQL Workbench** (Recomendado para a importação do banco de dados)

---

## 🚀 Como executar localmente

### 1. Clone o repositório
```bash
git clone https://github.com/seuusuario/VetPatinhas.git
cd VetPatinhas
```

### 2. Configure o Banco de Dados
O arquivo `db/Database.sql` contém a exportação completa do banco de dados do projeto.
- Abra o **MySQL Workbench** e conecte-se ao seu servidor local.
- Abra o arquivo `db/Database.sql` no Workbench.
- Execute o código (clicando no ícone do raio ⚡) para criar automaticamente o banco de dados, as tabelas e inserir os dados de teste.

*(Alternativa para quem usa apenas o terminal)*:
```bash
mysql -u root -p < "db/Database.sql"
```

### 3. Configure a Conexão (.env)
Caso o usuário e senha do seu MySQL sejam diferentes do padrão (`root` com senha vazia), edite o arquivo `.env` localizado na raiz do projeto com as suas credenciais.

### 4. Inicie o Servidor Local
Para rodar o projeto, execute o script de inicialização na raiz do repositório:
```bash
./iniciar.sh
```
*(Ou inicie manualmente usando: `cd src && php -S localhost:3000`)*

### 5. Acesse o Sistema
Abra o seu navegador e acesse: 👉 [http://localhost:3000/Index/index.php](http://localhost:3000/Index/index.php)

---

## 🔐 Logins de Teste

**Funcionário (Médico)**  
🩺 Email: `nina.santos@vetpatinhas.com`  
🔑 Senha: `VetPatinh@s`  

**Cliente**  (Ana Clara - animal: Molly)
🐾 RGA: `3374`  
🔑 Senha: `12345`  

---

## 🔗 Referências

- [Pet Care](https://petcare.com.br/) — Referência de estrutura e serviços
- [FullCalendar.io](https://fullcalendar.io/) — Utilizado no calendário de agendamentos
- [Bootstrap](https://getbootstrap.com/) — Estrutura visual responsiva
- [PHP Manual](https://www.php.net/manual/pt_BR/) — Documentação oficial do PHP
- [MySQL Docs](https://dev.mysql.com/doc/) — Documentação oficial do MySQL

---

## 👨‍💻 Equipe do Projeto

- **Fabio Pacheco** – Back-End e Gerente do Projeto  
- **Heloise Soares** – Front-End e Design  
- **Marcela Olmedilha** – Front-End e Organização  
- **Isabelli Montenegro** – Banco de Dados

---

## 📄 Licença

Este projeto foi desenvolvido para fins acadêmicos e não possui fins comerciais.  

---

## 💚 Projeto desenvolvido com carinho para a clínica **VetPatinhas**.
