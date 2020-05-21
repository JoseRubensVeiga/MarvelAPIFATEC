# Projeto Consumo API da MARVEL

## Erros encontrados e solucionados

1 - Instabilidade na página da documentação. -> tentamos seguidas vezes até funcionar
2 - problemas para adicionar permissões na chave da api -> pegamos uma chave pública de terceiros

## Passo a passo para futuros projetos com a mesma api:

- Cadastrar-se em https://developer.marvel.com/
- Criar uma chave de acesso
- Criar um hash md5 com um timestamp, a chave privada e a chave pública.
- Enviar a requisição com o timestamp, a chave publica e o md5 criptografado para https://gateway.marvel.com/v1/public/.
- Os dados virão dentro de data->results.
