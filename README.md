### Resumo

Tradução para Português do Brasil do OpenCart versão 2.0, mantida e revisada pela comunidade OpenCart Brasil.
Segue o link para download do pacote de instalação atualizado, baixe a tradução conforme a versão do OpenCart que você estiver utilizando: (baixe o arquivo traducao.ocmod.zip)

https://github.com/opencartbrasil/traducao/releases

A partir da versão 2.0 do OpenCart, automatizamos o processo de configuração da tradução aproveitando recursos nativos do OpenCart, ao executar as seguintes tarefas no momento da instalação da tradução:

- Cadastrar automaticamente o idioma português do Brasil;
- Configurar o idioma português do Brasil como padrão da loja e administração;
- Cadastrar automaticamente a moeda Real;
- Configurar a moeda Real como moeda padrão da loja;
- Desativar a atualização do valor da moeda;
- Configurar o país Brasil para que o campo CEP seja obrigatório.

Observação: O processo é automatizado quando feito através do instalador de extensões do OpenCart.

Caso deseje doar um valor para contribuir com este trabalho continuo e sempre gratuito, clique no botão abaixo:

[![alt tag](https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7G9TR9PXS6G5J)

### Instalação ou atualização

 1. Na administração da loja acesse o menu System->Settings (Configurações->Lojas), clique no botão 'Edit' (Editar), e na aba FTP preencha as informações de acesso ao ftp de sua hospedagem, com atenção especial ao campo 'FTP Root' (Diretório FTP) que é onde deve ficar o diretório raiz onde está instalado o seu OpenCart, depois clique no botão 'Save' (Salvar).
 2. Acesse o menu Extensions->Extension Installer (Extensões->Instalador), clique no botão Upload e selecione o arquivo 'traducao.ocmod.zip' (que você baixou deste repositório), e aguarde a conclusão da instalação automática. Caso já tenha instalado outra tradução ou esteja atualizando sua atual tradução, o instalador lhe mostrará os arquivos que serão substituídos no campo 'Files that will be overwritten' (Arquivos que serão substituídos), neste caso, clique no botão Continue (Continuar), e aguarde a conclusão da instalação.
 3. Pronto! Sua loja está traduzida e configurada.

### Dificuldades

Caso esteja tendo dificuldades ao utilizar o instalador de extensões do OpenCart por causa das configurações de FTP, utilize a modificação abaixo que cria a possibilidade de utilizar o instalador do OpenCart sem a necessidade do FTP:
https://github.com/opencartbrasil/instalador-sem-ftp

### Dúvidas

Antes de registrar uma Issue, siga os passos abaixo:

 1. Se tiver problemas com a instalação, [clique aqui](http://www.opencartbrasil.com.br/forum/).

### Como contribuir

 1. Faça um Fork do projeto e edite os arquivos que desejar.
 2. Faça um Pull para que suas sugestões de melhorias sejam avaliadas e aceitas, caso aprovadas.

### Licença

[GNU General Public License version 3 (GPLv3)](https://github.com/opencartbrasil/traducao/blob/master/LICENSE)
