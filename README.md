Site TecNotocias usando Laravel. 

  

Ao baixar ou clonar o projeto.  

Você precisa ter o PHP 8 e Composer instalados em sua maquina. 

  

Caso não tenha, baixar a versão php 8 no site https://www.php.net/downloads e escolher a opção Windows downloads. E depois baixar o zip do php. 

  

Depois de baixar, descompactar em um lugar a qual você não vai deletar. Ex: C:\php-8.   

Ao terminar de descompactar, copiar o caminho que foi descompactado, como no exemplo acima. 

![caminho php](https://user-images.githubusercontent.com/73076325/112774257-7b271480-900f-11eb-8cd1-e1ce07c8d957.png)


Agora aperte a tecla windows + R, e digitar o comando sysdm.cpl, vai abrir uma janela Propriedades do Sistema. 

![sistema](https://user-images.githubusercontent.com/73076325/112774347-cccf9f00-900f-11eb-8487-bc0d9fe79b3f.png)


Clique na aba avançado, e depois em Variáveis de Ambiente. 

![propriedades](https://user-images.githubusercontent.com/73076325/112774392-e96bd700-900f-11eb-95ce-4a78ad8d4f2c.png)


Nessa janela procurar em Variáveis de Sistema a opção Path e dar duplo clique. 

![variaveis](https://user-images.githubusercontent.com/73076325/112774437-0accc300-9010-11eb-9482-6fa02c9a6e7a.png)


Na nova janela aberta clicar em novo e colar o caminho copiado. De ok em todas janelas até fechar todas.

![edivariaveis](https://user-images.githubusercontent.com/73076325/112774468-2afc8200-9010-11eb-92a6-affaa5af3932.png)


Agora copie o arquivo php.ini-development e cole ele na mesma pasta do php, renomeei a cópia do php.ini-development para php.ini. 

![phpini](https://user-images.githubusercontent.com/73076325/112774530-6008d480-9010-11eb-81f4-8fe0cf17fd76.png)


 

Se você não tem o composer instalado no Computador, baixar no site https://getcomposer.org/download/ e escolher a opção Composer-Setup.exe. 

Ao terminar de baixar é só seguir a instalação normal do Composer. 

 

Estamos chegando lá. 

 

Agora você pode baixar ou clonar o projeto. 

Descompacte ele em uma pasta.  

Depois entre na pasta do projeto. Renomeie o arquivo .env.exemple para .env  

Você agora precisar iniciar o Prompt ou o Powershel. 

No prompt entrar no caminho em que você descompactou. Ex: cd C:\TecNoticias-master 

 Quando você estiver nesse caminho, digite “composer install”.Ele vai instalar todos os pacotes php necessários. 

Digite o comando "php artisan key:generate". Esse vai gerar uma chave para sua aplicação. 

Pronto seu projeto está clonado, compartilhado e instalado. Pronto para qualquer alteração e teste. 
