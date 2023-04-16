<h1 align="center"> Prova PHP - Freelance - Fase 2</h1>

<p align="center">
O programa consiste em um algoritmo PHP para "desenhar" padrões no console, na proposta da fase 2, o código foi refatorado para ser compativel com orientação a objetos e melhorado estruturalmente.
</p>

<p align="center">
  <a href="#-features">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-instru%C3%A7%C3%B5es">Instruções de Uso</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#%EF%B8%8F-layout">Layout</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-tecnologias">Tecnologias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p>

<br>

## 💻 Features

O objetivo deste programa é permitir que os usuários "desenhem" padrões no console, escolhendo entre duas opções: Cruz ou X, e selecionando a cor desejada.

- Printar uma Cruz ou um X no console
  - Lê e valida o input do usuário
- Opção de escolher a cor que será usada na saída
  - 7 opções de cores com código ANSI
- Retorna ao inicio em caso input inválido

## 📝 Instruções

### Pré-Requisitos

Antes de clonar e executar este algoritmo, você precisará ter instalado em sua máquina as seguintes ferramentas:

- [Git](https://git-scm.com)
- [PHP](https://www.php.net/downloads)

Se estiver no Windows, é necessário adicionar o PHP ao Caminho da Variável de Ambiente para que se torne acessível a partir da linha de comando (CLI). Você pode seguir este [tutorial em inglês](https://www.geeksforgeeks.org/how-to-execute-php-code-using-command-line/) ou este [tutorial em português](https://acervolima.com/como-executar-o-codigo-php-usando-a-linha-de-comando/) para fazer isso.

### Como executar o algoritmo

No terminal ou prompt de comando, execute os seguintes comandos:

```bash
# Verifique se o PHP está instalado corretamente
$ php -v

# Clone este repositório
$ git clone https://github.com/jvmantovas/provaphp-freela.git

# Acesse a pasta do repositório
$ cd provaphp-freela

# Execute o arquivo
$ php prova-poo.php
```

Siga as instruções apresentadas pelo programa para escolher o desenho e a cor (exemplo nas imagens abaixo).

## 🖼️ Layout

<p align="center">
  <img alt="Cruz Vermelha" src="https://github.com/jvmantovas/provaphp-freela/blob/main/img/redcross.png">
</p><br />
<p align="center">
  <img alt="X Roxo" src="https://github.com/jvmantovas/provaphp-freela/blob/main/img/purplex.png">
</p>

### Como funciona o programa

O programa começa pedindo ao usuário que escolha entre a opção de desenhar uma Cruz ou um X. Depois disso, o usuário deve escolher a cor que deseja usar para desenhar. O programa então usa o código ANSI da cor selecionada para imprimir o padrão no console.

## 🚀 Tecnologia

Esse projeto foi desenvolvido em:

- [PHP 8.2](https://www.php.net/downloads)

```
PHP 8.2.4 (cli) (built: Mar 14 2023 17:54:25) (ZTS Visual C++ 2019 x64)
```
