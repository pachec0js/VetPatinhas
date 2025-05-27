# 🐾 VetPatinhas - Sistema de Clínica Veterinária

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
├── frontend/                 # Telas de interface do usuário
│   ├── login.php
│   ├── cadastro.php
│   ├── agendamento.php
│   ├── index.php
│
├── adm/                      # Área administrativa dos médicos
│   ├── calendario.php
│   ├── prontuarios_medico.php
│   ├── enviarprontuario.php
│
├── backend/                  # Funções de controle e banco de dados
│   ├── controle_estoque.php
│   ├── reset_password.php
│
├── uploads/                  # Pasta onde os PDFs dos prontuários são armazenados
│
├── connect/
│   └── conexao.php           # Conexão com o banco de dados
│
└── README.md                 # Documentação do projeto
```

---

## 🧠 Tecnologias Utilizadas

- **PHP** (puro, sem framework)
- **MySQL**
- **Bootstrap 5** (para responsividade e interface)
- **JavaScript** (para calendário e funcionalidades interativas)
- **HTML5 e CSS3**

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

- XAMPP ou WAMP
- Banco de dados MySQL com script do projeto
- PHP 7 ou superior

---

## 🚀 Como executar localmente

```bash
# Clone este repositório
git clone https://github.com/seuusuario/VetPatinhas.git

# Coloque dentro do diretório htdocs do XAMPP
mv VetPatinhas/ C:/xampp/htdocs/

# Acesse o phpMyAdmin e importe o script do banco de dados (arquivo .sql fornecido)

# Execute no navegador
http://localhost/VetPatinhas/frontend/login.php
```

---

## 🔐 Logins de Teste

**Funcionário (Médico)**  
🩺 Email: `NinaSantos@vetpatinhas.com`  
🔑 Senha: `VetPatinh@s`  

**Cliente**  
🐾 Email: `clara@example.com`  
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
