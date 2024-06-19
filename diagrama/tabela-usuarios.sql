CREATE TABLE tbl_usuarios (
id_usuario INT AUTO_INCREMENT PRIMARY KEY,
nome_usuario VARCHAR(50),
sobrenome_usuario VARCHAR(50),
email_usuario VARCHAR(100),
senha_usuario VARCHAR(120),
hash_usuario VARCHAR(120),
id_status INT,
data_cadastro DATETIME,
data_atualizacao DATETIME
FOREIGN KEY (id_status) REFERENCES tbl_usuarios(id_status)
)