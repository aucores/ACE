### Instalação

1. Faça o download dos arquivos.
2. Extraia o pacote e copie para seu webserver.
3. Acesse sua URL e inicie a instalação, é bem simples, basta preencher as informações no assistente de instalação **ACE**.

### Atualização para versão 3.*
1. Faça backup do banco de dados.
2. Remova a pasta system da instalação atual.
3. Copie os novos arquivos e substitua.
4. Execute o script update_v2_to_v3 para atualizar o banco de dados (Nenhuma informação será perdida).
5. Acesse o sistema com o usuário administrador utilizando a senha `123456`.
6. Será preciso alterar as senhas dos usuários pois o sistema na versão 3 utiliza um novo padrão de criptografia.

### Não esqueça de apagar a/as pasta/as e os arquivos depois da Instalação/Atualização
1. Pasta Install
2. Pasta Updates
3. LICENSE.txt
4. README.md
5. .gitignore
6. .gitattributes

### Frameworks/Bibliotecas
* [bcit-ci/CodeIgniter](https://github.com/bcit-ci/CodeIgniter)
* [twbs/bootstrap](https://github.com/twbs/bootstrap) 
* [jquery/jquery](https://github.com/jquery/jquery) 
* [jquery/jquery-ui](https://github.com/jquery/jquery-ui) 
* [mpdf/mpdf](https://github.com/mpdf/mpdf) 
* [Matrix Admin](http://wrappixel.com/demos/free-admin-templates/matrix-admin/index.html)

### Requerimentos
* PHP >= 5.5.0
* MySQL
