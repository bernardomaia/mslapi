## Documentação 

Para executar a tarefa foi utilizado o framework Laravel. Os arquivos que contêm a lógica relevante para o teste são: 
 * msl-api/app/Http/Controllers/ListController.php: implementação da função que calcula soma máxima do subarray.
 * msl-api/routes/maxsum.php: declara a rota maxsum e realiza a chamada da função apropriada no Controller.
 * msl-api/tests/Feature/MaxsumTest.php: arquivo que executa alguns testes da função implementada.

# Execução 
Fazer o download do projeto. No diretório raiz do projeto, executar o comando:

```bash
composer install
```
**Caso a versão utilizada do PHP seja a 8**: pode ser necessário atualizar o composer como descrito no link:https://getcomposer.org/download/. Neste caso o comando que deve ser executado é: 
```bash
php composer.phar install
```

E em seguida:
```bash
php artisan serve
```


Para enviar requisições para a api, pode-se utilizar uma ferramenta como Postman com a requisição 
post http://localhost:8000/maxsum
Enviando os dados da requisição como um json com o formato descrito na documentação 
```bash
{
 “list”:[1,2,3]
}
```
Pode-se também utilizar o comando curl 
```bash
curl --header "Content-Type: application/json" \
  --request POST \
  --data '{"list":[1,2,3]}' \
  http://localhost:8000/maxsum
```
Para executar o arquivo de teste utiliza-se o comando 
	
```bash
    php artisan test 
```
