# Projeto de Administração de um Sistema Farmacêutico
Repositório destinado para a avaliação somativa sobre administração de farmácia com o Framework Laravel.

>  ## _índice:_

- [Introdução](#introdução);
- [Objetivos do Projeto](#objetivos-do-projeto);
- [Funcionalidades](#funcionalidades);
- [Banco de Dados](#banco-de-dados);
- [Análise de riscos](#análise-de-risco);
- [Estrutura de Programação](#estrutura-de-programação);

>  ## _Introdução_
No cenário atual das farmácias, a gestão eficiente de medicamentos, aliada ao atendimento ágil e seguro dos clientes, é essencial para garantir a qualidade dos serviços oferecidos. Com o avanço da tecnologia, a necessidade de sistemas automatizados que possam otimizar essas operações se tornou evidente.

Este projeto tem como objetivo desenvolver um sistema farmacêutico robusto e intuitivo, voltado para a melhoria das operações diárias em farmácias. O sistema permitirá o gerenciamento eficaz de medicamentos, o registro detalhado de vendas, e a administração segura de dados de clientes e funcionários.

Com foco em facilitar a vida tanto dos profissionais que atuam nas farmácias quanto dos clientes, este projeto visa criar uma solução que não apenas automatize processos, mas também garanta a segurança e a eficiência em todas as etapas de atendimento.

O público-alvo deste sistema inclui farmacêuticos, funcionários administrativos, e clientes que buscam um serviço ágil e confiável. A implementação deste sistema proporcionará uma experiência mais eficiente e segura, refletindo diretamente na satisfação dos usuários e na melhoria da gestão interna das farmácia.
<br>
> ## _Objetivos do Projeto_
Os principais objetivos desse sistema, são:<br>
**1. Específicos:**
- Automatizar a gestão de medicamentos.
- Facilitar o processo de compra e venda.
- Prover um sistema seguro de gerenciamento de dados de clientes e funcionários.
<br>

**2. Mensuráveis:**
- Reduzir o tempo de atendimento em 100%.
- Diminuir erros na venda de medicamentos em 100%.
<br>

**3. Atingíveis:**
- O projeto será implementado em fases, garantindo que cada etapa seja concluída dentro do cronograma.
<br>

**4. Relevantes:**
- O sistema será essencial para melhorar a precisão e segurança na gestão farmacêutica.
<br>

**5. Temporais:**
- O projeto será concluído em 3 meses, com entregas parciais a cada fase de desenvolvimento.

<br>

> ## _Funcionalidades_
As principais funcionalidades desse sistema, são:
- Gestão de Medicamentos: Cadastro, atualização, e controle de estoque.
- Registro de Vendas: Controle de transações, histórico de compras, e geração de recibos.
- Cadastro de Clientes e Funcionários: Gestão de perfis com segurança e privacidade.
- Relatórios: Geração de relatórios para análise de vendas, estoque, e performance.

<br>

### _Manual de Instrução:_

**_Fluxograma de Uso:_**
- Página Inicial do Site:
<div align="center">
    <img src="imagens_de_uso_web/pagina_inicial.png" alt="Página Inicial do Site" width="800vh">
</div>

Uma página bem simples, com um cabeçalho contendo os links para as outras páginas (Home, produtos e vendas) e dois botões (Login e cadastro).

<hr>

- Página  de Login:
<div align="center">
    <img src="imagens_de_uso_web/pagina_login.png" alt="Página de Login do Site" width="800vh">
</div>

Está página contem dois campos para serem inseridos:
- Email;
- Senha;<br>

Ambos os campos possuem tratamentos e validações para verificação de possíveis falhas que podem interferir no desempenho e na segurança do site.
  
<hr>

- Página de Cadastro de Usuários:
 <div align="center">
    <img src="imagens_de_uso_web/pagina_cadastro.png" alt="Página de Cadastro do Site" width="800vh">
</div>

Na página de cadastro, possuí 5 campos de entrada contendo às seguintes informações:
- Nome;
- CPF;
- Email;
- Senha;
- Confirmar Senha;<br>

Entretanto, existe um campo para escolher duas opções de usuários:
- Cliente:<br>
      O usuário cliente terá acesso somente a página Home e a página de produtos, não podendo acessar outras páginas sem autorização.<br>
- Funcionário:<br>
      O usuário funcionário terá acesso em todas as páginas, podendo realizar tarefas específicas como cadastro, exlusão e edição de produtos.
  
<hr>

- Cabeçalho (Visão dos funionários):
<div align="center">
    <img src="imagens_de_uso_web/header_funcionario.png" alt="Header dos Funcionários" width="800vh">
</div>

Ao realizar o login como tipo "funcionário", ele terá um acesso extra para a página de vendas, que será explicado mais afrente.

<hr>

- Página de Produtos (Visão do Funcionário):
<div align="center">
    <img src="imagens_de_uso_web/pagina_produtos_func.png" alt="Página de Produtos" width="800vh">
</div>

Na página de produtos, os medicamentos são exibidos em cards, contendo as seguintes informações:
- Descrição;
- Quantidade;
- Preço;<br>

Além disso, existe a possibilidade de pesquisar pela descrição ou pelo preço do medicamento.<br>

Em relação ao usuário "funcionário", ele tem algumas funções de cadastrar medicamentos, no qual essa possibilidade não é permitida para um usuário comum.

<hr> 

- Página de Listagem de Medicamentos:
<div align="center">
    <img src="imagens_de_uso_web/pagina_adicionar_medicamento.png" alt="Página de Listagem de Medicamentos" width="800vh">
</div>

Nesta página, o funcionário poderá visualizar todos os medicamentos cadastrados no site. Além disse, também existe a possibilidade dele realizar os seguintes procedimentos:
- Cadastro de medicamentos;
- Exclusão de medicamentos;
- Atualização de medicamentos;<br>

<hr>

- Página de Cadastro de Medicamentos:
<div align="center">
    <img src="imagens_de_uso_web/cadastro_medicamento.png" alt="Página de Cadastro de Medicamentos" width="800vh">
</div>

Na página de cadastro de produtos, o funcionário poderá realizar o cadastro com os seguintes campos:
- Descrição (Nome do Medicamento);
- Quantidade;
- Preço;

<hr>

- Página de Edição de Medicamentos:
<div align="center">
    <img src="imagens_de_uso_web/editar_medicamento.png" alt="Página de Edição de Medicamentos" width="800vh">
</div>

Similar a página de cadastro do medicamento, a página de edição puxa as informações do medicamento conforme foi selecionado, permitindo assim a atualização dos seguintes items:
- Descrição (Nome do Medicamento);
- Quantidade;
- Preço;

<hr>

- Página do Relatório de Vendas:
<div align="center">
    <img src="imagens_de_uso_web/pagina_vendas.png" alt="Página do Relatório de Vendas" width="800vh">
</div>

Como havia dito anteriormente, essa página é restria somente para os funcionários, no qual poderão analisar as informações de vendas realizadas ao longo do período. Nela, possuí as seguintes informações:
- ID da compra (Nº);
- Nome do cliente;
- Descrição do produto;
- Quantidade que o cliente comprou;
- O total que o cliente pagou;<br>
Essas informações são bem utéis para melhor análise e desemenho das vendas realizadas.

<hr>

- Página de Compra do Medicamento:
<div align="center">
    <img src="imagens_de_uso_web/pagina_compra_produto.png" alt="Página de Compra do Produto" width="800vh">
</div>

Essa página pode ser acessada por ambos os tipos de usuários, nela, o cliente/funcionário poderão realizar compras do produtos, escolhendo a quantidade que eles gostariam de comprar e o valor total que será multiplicado pela quantidade conforme ela for aumentando.<br>
Além disso, após a compra do produto, a quantidade irá diminuir no estoque, fazendo com que o funcionário tenha um controle melhor em relação aos medicamentos cadastrados.

<br>

> ## _Banco de Dados_
Imagem do Diagrama conceitual:
<div align="center">
    <img src="projeto_farmacia_bd/bd_farmacia_diagrama_conceitual.png" alt="Imagem do Diagrama Conceitual" width="800vh">
</div>
<br>

### _Tabelas e Elementos:_

**Tabela: Cliente**
- id_cliente (Chave Primária)
- nome
- email
- senha
- cpf

**Tabela: Funcionário**
- id_func (Chave Primária)
- nome
- email
- senha
- cpf

**Tabela: Medicamentos**
- id_medicamento (Chave Primária)
- preco
- qtde (quantidade)
- descricao

**Tabela: Vendas**
- id_venda (Chave Primária)
- desc_medicamento
- nome_cliente
- total
- qtde (quantidade)
- data
<br>

### _Relações:_
- Cliente e Vendas: Um cliente pode realizar várias vendas (relação 1).
- Funcionário e Medicamentos: Um funcionário pode cadastrar vários medicamentos (relação 1).
- Medicamentos e Vendas: Um medicamento pode estar relacionado a várias vendas (relação 1).

<br>

> ## _Análise de riscos_
Aqui estão alguns possíveis problemas que podem ocorrer durante o projeto:<br><br>
**1. Falhas no Sistema de Autenticação:**
- Descrição: Possibilidade de vulnerabilidades no sistema de login e autenticação que possam permitir o acesso não autorizado.
- Impacto: Acesso indevido a informações sensíveis de clientes e funcionários, comprometendo a segurança dos dados.
- Mitigação: Implementação de autenticação multifator (MFA) e criptografia robusta para senhas.
<br>

**2. Perda ou Corrupção de Dados:**
- Descrição: Possibilidade de perda ou corrupção de dados críticos devido a falhas no banco de dados ou problemas no servidor.
- Impacto: Perda irreparável de informações sobre medicamentos, clientes, e vendas, afetando a operação da farmácia.
- Mitigação: Realização de backups regulares e implementação de mecanismos de recuperação de desastres.
<br>

**3. Ataques de SQL Injection:**
- Descrição: Risco de ataques de injeção de SQL, onde um invasor pode manipular consultas SQL para obter acesso não autorizado ao banco de dados.
- Impacto: Comprometimento do banco de dados, resultando na exposição de dados confidenciais.
- Mitigação: Utilização de consultas parametrizadas e práticas seguras de codificação para prevenir SQL Injection.
<br>

**4. Falta de Escalabilidade do Sistema:**
- Descrição: O sistema pode não suportar um aumento significativo de usuários e transações.
- Impacto: Desempenho degradado, lentidão, e possíveis interrupções no serviço à medida que a farmácia cresce.
- Mitigação: Planejamento e arquitetura escalável desde o início, com uso de serviços de nuvem e balanceamento de carga.
<br>

**5. Problemas de Conformidade Legal:**
- Descrição: Risco de não conformidade com leis e regulamentos relacionados à privacidade e segurança de dados (como a LGPD).
- Impacto: Penalidades legais, multas, e danos à reputação da farmácia.
- Mitigação: Consulta com especialistas em conformidade e implementação de medidas para garantir que o sistema atenda a todos os requisitos legais.
<br>

**6. Dependência de Fornecedores Terceirizados:**
- Descrição: Dependência de serviços de terceiros, como provedores de hospedagem ou APIs externas, que podem ter interrupções ou falhas.
- Impacto: Interrupções no sistema ou perda de funcionalidade em caso de falhas do fornecedor.
- Mitigação: Acordos de nível de serviço (SLAs) rigorosos e planejamento de contingências, como backup de serviços.
<br>

**7. Erros Humanos:**
- Descrição: Risco de erros humanos na manipulação de dados, configuração do sistema, ou no desenvolvimento do código.
- Impacto: Falhas no sistema, perda de dados, ou introdução de vulnerabilidades de segurança.
- Mitigação: Treinamento adequado dos funcionários e implementação de processos de revisão e auditoria.

<br>

> ## _Estrutura de Programação_
**Framework Laravel**
<br>
O portal de empregos foi desenvolvido utilizando o framework Laravel, uma poderosa ferramenta baseada em PHP que permite o desenvolvimento de aplicações web de forma rápida e segura. Laravel oferece uma arquitetura bem estruturada e organizada, facilitando a implementação de funcionalidades complexas, como autenticação de usuários, gerenciamento de dados e integração com APIs. Suas características, como o sistema de rotas simples, a utilização de Eloquent ORM para manipulação de banco de dados e o suporte a migrações, fazem dele uma escolha ideal para projetos que demandam escalabilidade e segurança.

<hr>

**Banco de Dados Postgresql**
<br>
Para o gerenciamento dos dados, optamos pelo PostgreSQL, um banco de dados relacional conhecido por sua robustez, desempenho e conformidade com o padrão SQL. PostgreSQL oferece suporte a transações complexas, integridade referencial e a capacidade de lidar com grandes volumes de dados, o que o torna perfeito para uma aplicação que precisa armazenar e gerenciar informações críticas, como perfis de candidatos, vagas de emprego, e dados empresariais. A combinação de Laravel com PostgreSQL garante que o sistema seja não apenas funcional, mas também seguro e eficiente.

<hr>

**Bootstrap**
<br>
Bootstrap é um popular framework de front-end utilizado para criar interfaces web responsivas e modernas. Desenvolvido pela equipe do Twitter, ele oferece uma ampla gama de componentes prontos, como botões e formulários, além de um sistema de grid flexível que facilita o design para diferentes dispositivos.

<hr>

**Github**
<br>
Além disso, utilizamos o Git como sistema de controle de versão, permitindo o armazenamento seguro de todos os arquivos do projeto e da documentação. O Git não só facilita a colaboração entre os membros da equipe, como também assegura que todas as mudanças no código sejam registradas e possam ser revertidas, se necessário, garantindo assim um desenvolvimento mais organizado e controlado.


