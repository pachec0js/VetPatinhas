drop database vetpatinhas;
CREATE DATABASE vetpatinhas; 
use vetpatinhas; 
CREATE TABLE servicos ( 
id_servicos INT PRIMARY KEY NOT NULL auto_increment , 
nome  varchar(100) NOT NULL, 
tipo enum ('serviços','exames laboratoriais','exames de imagem' ) 
); 

CREATE TABLE medicos ( 
id_funcionario INT(11) PRIMARY KEY NOT NULL auto_increment , 
nome varchar (100) not null,
telefone varchar(15) not null,
cpf varchar(11) not null,
datanasc varchar(10) not null, 
email varchar (100) not null, 
senha varchar(100) not null 
); 

CREATE TABLE funcoes ( 
id_servicos int not null, 
foreign key (id_servicos) references servicos (id_servicos), 
nome varchar(50) not null, 
Id_responsavel INT(11) not null, 
foreign key (id_responsavel) references medicos (id_funcionario) 
); 

CREATE TABLE medicamentos ( 
id_medicamentos INT(11) PRIMARY KEY NOT NULL auto_increment , 
nome  varchar(100) NOT NULL, 
tipo enum ('Hormônios','Anestésicos','Sedativos','Cardiológicos','Antiparasitários','Neurológicos','Oncológicos','Analgésicos','Antibióticos','Anti-inflamatorio') 
); 

CREATE TABLE estoque ( 
id_medicamentos INT(11) NOT NULL auto_increment , 
foreign key (id_medicamentos) references medicamentos (id_medicamentos), 
nome  varchar(100) NOT NULL , 
categoria  enum ('Hormônios','Anestésicos','Sedativos','Cardiológicos','Antiparasitários','Neurológicos','Oncológicos','Analgésicos','Antibióticos','Anti-inflamatorio'), 
quantidade varchar (100) NOT NULL, 
dosagem varchar(100) not null, 
forma enum ('comprimido','injetavel','capsula'), 
data_validade Varchar (100) not null, 
fornecedor enum ('vetpharma','petmed','formavet','medicpet','biovet','agrofarm','petsaúde','pharmapets'), 
ultima_compra  Varchar (100) not null, 
observacoes text not null 
); 

CREATE TABLE usuarios ( 
nome_animal varchar(100) NOT NULL, 
nome_tutor  varchar(100) NOT NULL, 
genero ENUM('masculino', 'feminino') NOT NULL, 
Id_animal INT(11) PRIMARY KEY NOT NULL auto_increment, 
telefone int(11) NOT NULL, 
email  varchar(100) NOT NULL , 
senha varchar(20) NOT NULL, 
cep varchar (8) not null, 
rga varchar (11) unique NOT NULL, 
especie ENUM('cachorro', 'gato', 'aves', 'roedores') not null,    
porte ENUM('pequeno', 'medio', 'grande', 'gigante') not null, 
idade Int not null 
); 

CREATE TABLE agendamentos (
id_consulta INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome_funcionario VARCHAR(100) NOT NULL,
tipo ENUM('serviço', 'exames de imagem', 'exames laboratoriais'),
especialidade VARCHAR(100) NOT NULL,
nome_animal VARCHAR(100) NOT NULL,
porte ENUM('pequeno', 'medio', 'grande', 'gigante') NOT NULL,
nome_tutor VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
telefone INT NOT NULL,
situacao ENUM('sem risco', 'emergencial'),
dia DATE NOT NULL,
horario TIME NOT NULL
);	

CREATE TABLE prontuarios (
    id_prontuario INT AUTO_INCREMENT PRIMARY KEY,  
    id_consulta INT NOT NULL,                     
    id_medico INT NOT NULL,                       
    id_animal INT NOT NULL,                        
    prontuario_pdf VARCHAR(255) DEFAULT NULL,      
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (id_consulta) REFERENCES agendamentos(id_consulta), 
    FOREIGN KEY (id_medico) REFERENCES medicos(id_funcionario),     
    FOREIGN KEY (id_animal) REFERENCES usuarios(id_animal)          
);

create table documento (
id_documento INT PRIMARY KEY NOT NULL auto_increment,
data_exame VARCHAR(10) NOT NULL,
nome_exame VARCHAR(45) NOT NULL,
numero_acesso VARCHAR(8) NOT NULL,
senha_acesso VARCHAR(255) NOT NULL,
pdf_arquivo mediumblob not null
);

insert into medicamentos (nome, tipo) values  
('Amlodipina', 'Hormônios'), 
('Nifedipina', 'Hormônios'), 
('Levotiroxina', 'Hormônios'), 
('Carbimazol', 'Hormônios'), 
('Desonidrocorticosterona', 'Hormônios'), 
('Ketamina', 'Hormônios'), 
('Levotiroxina', 'Anestésicos'), 
('Propofol', 'Anestésicos'), 
('Isoflurano', 'Anestésicos'), 
('Diazepam', 'Sedativos'), 
('Midazolam', 'Sedativos'), 
('Acepromazina','Sedativos'), 
('Carbimazol', 'Sedativos'), 
('Enalapril', 'Cardiológicos'), 
('espironolactona', 'Cardiológicos'), 
('Furosemida', 'Cardiológicos'), 
('espironolactona', 'Cardiológicos'), 
('Prazicuantel', 'Antiparasitários'),
('pirantel', 'Antiparasitários'), 
('milbemicina', 'Antiparasitários'), 
('Fipronil', 'Antiparasitários'), 
('imidacloprid', 'Antiparasitários'), 
('Fenobarbital', 'Neurológicos'), 
('levetiracetam', 'Neurológicos'), 
('Carboplatina', 'Oncológicos'), 
('ciclofosfamida', 'Oncológicos'),   
('Paracetamol', 'Analgésicos'), 
('Buprenorfina', 'Analgésicos'), 
('Penicilinas', 'Antibióticos'), 
('cefalosporinas', 'Antibióticos'), 
('fluoroquinolonas', 'Antibióticos'), 
('aminoglicosídeos', 'Antibióticos'), 
('meloxicam', 'Anti-inflamatorio'), 
('cetoprofeno', 'Anti-inflamatorio'); 

insert into servicos (nome, tipo) values  
('castração', 'Serviços'), 
('terapia comportamental', 'Serviços'), 
('atendimentos veterinários', 'Serviços'), 
('internação', 'Serviços'), 
('UTI', 'Serviços'), 
('acupuntura veterinária', 'Serviços'), 
('dermatologia veterinária', 'Serviços'), 
('hematologia veterinária', 'Serviços'), 
(' odontologia veterinária', 'Serviços'), 
('radioterapia veterinária', 'Serviços'), 
('oftalmologia veterinária', 'Serviços'), 
('fisioterapia veterinária', 'Serviços'), 
('nutrição veterinária', 'Serviços'), 
('neurologia veterinária', 'Serviços'), 
('oncologia veterinária', 'Serviços'), 
('cuidados paliativos veterinários', 'Serviços'), 
('ortopedia veterinária', 'Serviços'), 
('anestesia veterinária', 'Serviços'), 
('cardiologia veterinária', 'Serviços'), 
('infectologia veterinária', 'Serviços'), 
('Biologia molecular', 'exames laboratoriais'), 
('fezes', 'exames laboratoriais'), 
('citologia', 'exames laboratoriais'), 
('urina', 'exames laboratoriais'), 
('dermatologia', 'exames laboratoriais'), 
(' bioquímica', 'exames laboratoriais'), 
('microbiologia', 'exames laboratoriais'), 
('sorologias ', 'exames laboratoriais'), 
('líquidos cavitários', 'exames laboratoriais'),   
('Eletrocardiograma', 'exames de imagem'), 
('holter', 'exames de imagem'), 
('pressão arterial', 'exames de imagem'), 
('ressonância magnética', 'exames de imagem'), 
('ultrassom', 'exames de imagem'), 
('ecocardiograma', 'exames de imagem'), 
('endoscopia', 'exames de imagem'), 
('broncoscopia', 'exames de imagem'), 
('rinoscopia', 'exames de imagem'), 
('raio-x', 'exames de imagem'), 
('tomografia ', 'exames de imagem') ; 

insert into medicos (nome, telefone, cpf, datanasc, email, senha) values  
('Nina Santos',11987654321,'01001000','15/03/1990', 'nina.santos@vetpatinhas.com', 'VetPatinh@s'), 
('Benício Souza',21998876543,'20010020','28/07/1985', 'benício.souza@vetpatinhas.com', 'VetPatinh@s'), 
('Caio Oliveira',31912345678,'30130030','10/12/1992', 'caio.oliveira@vetpatinhas.com', 'VetPatinh@s'), 
('Davi Costa',41976543210,'40040040','05/06/1988', 'davi.costa@vetpatinhas.com', 'VetPatinh@s'), 
('Maria Almeida',51943216789,'50050050','21/09/1995', 'maria.almeida@vetpatinhas.com', 'VetPatinh@s'), 
('José Silva',61988771234,'60060060','30/01/1993', 'josé.silva@vetpatinhas.com', 'VetPatinh@s'), 
('Amanda alves',71934567890,'70070070','18/11/1987', 'amanda.alves@vetpatinhas.com', 'VetPatinh@s'), 
('Beatriz pereira',81967894321,'80080080','25/04/1991', 'beatriz.pereira@vetpatinhas.com', 'VetPatinh@s'); 

insert into funcoes (Id_servicos,nome, Id_responsavel) values  
(19,'Nina Santos' ,1), 
(30,'Nina Santos' ,1), 
(35,'Nina Santos' ,1), 
(32,'Nina Santos' ,1), 
(21,'Benicio Souza' ,2), 
(22,'Benicio Souza' ,2), 
(23,'Benicio Souza' ,2), 
(24,'Benicio Souza' ,2), 
(25,'Benicio Souza' ,2), 
(26,'Benicio Souza' ,2), 
(27,'Benicio Souza' ,2), 
(28,'Benicio Souza' ,2), 
(29,'Benicio Souza' ,2), 
(15,'Caio Oliveira' ,3), 
(10,'Caio Oliveira' ,3), 
(7,'Caio Oliveira' ,3), 
(16,'Caio Oliveira' ,3), 
(11,'Davi Costa' ,4), 
(38,'Davi Costa' ,4), 
(36,'Davi Costa' ,4), 
(37,'Davi Costa' ,4), 
(20,'Davi Costa' ,4), 
(25,'Maria Almeida' ,5), 
(8,'Maria Almeida' ,5), 
(9,'Maria Almeida' ,5), 
(31,'Maria Almeida' ,5), 
(14,'José silva' ,6), 
(2,'José silva' ,6), 
(33,'José silva' ,6),   
(17,'Amanda Alves' ,7), 
(18,'Amanda Alves' ,7), 
(12,'Amanda Alves' ,7), 
(39,'Amanda Alves' ,7), 
(40,'Amanda Alves' ,7), 
(1,'beatriz Pereira' ,8), 
(3,'beatriz Pereira' ,8), 
(4,'beatriz Pereira' ,8), 
(5,'beatriz Pereira' ,8), 
(6,'beatriz Pereira' ,8), 
(12,'beatriz Pereira' ,8), 
(13,'beatriz Pereira' ,8), 
(34,'beatriz Pereira' ,8), 
(37,'beatriz Pereira' ,8);  

insert into estoque (Id_medicamentos,nome, categoria, quantidade ,dosagem ,forma ,data_validade ,fornecedor ,ultima_compra ,observacoes) values 
('1','Levotiroxinapina','Hormônios','30 comprimidos','5 mg','Comprimido','12/2026','Vetpharma','01/11/2024','Armazenar em local seco e fresco.'), 
('2','Nifedipina','Hormônios','20 comprimidos','10 mg','Comprimido','11/2025','Petmed','15/10/2024','Evitar luz direta, manter em temperatura ambiente.'), 
('3','Levotiroxina','Hormônios','50 cápsulas','25mcg','Cápsula','12/2026','Formavet','10/10/2024','Evitar luz direta, manter em temperatura ambiente.'), 
('4','Carbimazol','Hormônios','20 comprimidos','5 mg','Comprimido','08/2025','Medicpet','30/09/2024','Manter em local seco e protegido da luz.'), 
('5','Desonidrocorticosterona','Hormônios','10 ml','2 mg/ml','Injetável','03/2026','Biovet','22/09/2024','Armazenar em temperatura ambiente, longe de umidade.'), 
('6','Ketamina','Hormônios','10 ml','50 mg/ml','Injetável','07/2026','Agrofarm','20/08/2024','Armazenar em temperatura entre 2°C a 8°C.'), 
('7','Levotiroxina','Anestésicos','50 cápsulas','50mcg','Cápsula','11/2025','Vetpharma','01/10/2024','Manter em local refrigerado, protegido da luz.'), 
('8','Propofol','Anestésicos','20 ml','10 mg/ml','Injetável','04/2026','Petsaúde','12/09/2024','Armazenar em local seco e fresco.'), 
('9','Isoflurano','Anestésicos','250 ml','-','Injetável','09/2025','Pharmapets','15/08/2024','Manter refrigerado, protegido da luz.'), 
('10','Diazepam','Sedativos','30 comprimidos','5 mg','Comprimido','06/2025','Vetpharma','10/10/2024','Armazenar em temperatura ambiente, evitar exposição a calor.'), 
('11','Midazolam','Sedativos','20 ml','5 mg/ml','Injetável','12/2025','Petmed','05/10/2024','Armazenar em local seco e arejado.'), 
('12','Acepromazina','Sedativos','50 ml','10 mg/ml','Injetável','02/2026','Formavet','22/09/2024','Manter refrigerado, evitar exposição a luz.'), 
('13','Carbimazol','Sedativos','30 comprimidos','10 mg','Comprimido','11/2025','Medicpet','10/08/2024','Armazenar em temperatura entre 2°C e 8°C.'), 
('14','Enalapril','Cardiológicos','30 cápsulas','10 mg','Cápsula','03/2026','Biovet','20/09/2024','Manter em local seco e fresco.'), 
('15','Espironolactona','Cardiológicos','30 comprimidos','25 mg','Comprimido','10/2025','Pharmapets','10/09/2024','Armazenar em local fresco e seco.'), 
('16','Furosemida','Cardiológicos','20 cápsulas','40 mg','Cápsula','07/2025','Petsaúde','25/09/2024','Evitar umidade, manter em temperatura ambiente.'), 
('17','Espironolactona','Cardiológicos','40 comprimidos','50 mg','Comprimido','06/2025','Pharmapets','15/09/2024','Armazenar em local seco e protegido da luz.'), 
('18','Prazicuantel','Antiparasitários','10 comprimidos','50 mg','Comprimido','01/2026','Vetpharma','10/09/2024','Evitar exposição a umidade.'), 
('19','Pirantel','Antiparasitários','20 cápsulas','250 mg','Cápsula','08/2025','Petmed','05/10/2024','Manter em local fresco e seco.'), 
('20','Milbemicina','Antiparasitários','12.5 mg','-','Comprimido','04/2026','Formavet','20/08/2024','Armazenar em local seco e arejado.'), 
('21','Fipronil','Antiparasitários','50 ml','0.25 mg/ml','Injetável','09/2025','Medicpet','30/09/2024','Proteger da luz, manter em temperatura ambiente.'), 
('22','Imidacloprid','Antiparasitários','30 ml','10 mg/ml','Injetável','12/2025','Biovet','25/09/2024','Manter refrigerado, protegido da luz.'), 
('23','Fenobarbital','Neurológicos','30 comprimidos','30 mg','Comprimido','07/2026','Agrofarm','22/09/2024','Manter em temperatura ambiente, longe de umidade.'), 
('24','Levetiracetam','Neurológicos','20 cápsulas','500 mg','Cápsula','06/2025','Petsaúde','20/08/2024','Armazenar em local fresco e seco.'), 
('25','Carboplatina','Oncológicos','10 ml','10 mg/ml','Injetável','06/2026','Pharmapets','10/09/2024','Manter em local seco, protegido da luz.'), 
('26','Ciclofosfamida','Oncológicos','20 ml','50 mg/ml','Injetável','09/2025','Vetpharma','12/08/2024','Armazenar em temperatura entre 2°C e 8°C.'), 
('27','Paracetamol','Analgésicos','30 comprimidos','500 mg','Comprimido','02/2026','Petmed','10/09/2024','Manter em local refrigerado.'), 
('28','Buprenorfina','Analgésicos','10 ml','0.3 mg/ml','Injetável','06/2025','Formavet','22/08/2024','Armazenar em local seco, longe de umidade.'), 
('29','Penicilinas','Antibióticos','10 frascos','500 mg','Injetável','10/2025','Medicpet','12/10/2024','Manter refrigerado, longe de luz direta.'), 
('30','Cefalosporinas','Antibióticos','20 frascos','250 mg','Injetável','09/2025','Biovet','30/09/2024','Armazenar em local seco e fresco.'), 
('31','Fluoroquinolonas','Antibióticos','30 cápsulas','200 mg','Cápsula','04/2026','Agrofarm','05/10/2024','Manter refrigerado, protegido da luz.'), 
('32','Aminoglicosídeos','Antibióticos','10 ml','10 mg/ml','Injetável','02/2026','Petsaúde','20/08/2024','Manter refrigerado, protegido da luz.'), 
('33','Meloxicam','Anti-inflamatório','30 comprimidos','7.5 mg','Comprimido','03/2026','Pharmapets','12/10/2024','Armazenar em local seco e arejado.'), 
('34','Cetoprofeno','Anti-inflamatório','20 cápsulas','100 mg','Cápsula','07/2025','Vetpharma','30/09/2024','Manter em temperatura ambiente, protegido da luz.') ;


