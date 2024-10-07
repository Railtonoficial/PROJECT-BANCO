# Sistema de Gestão Bancária

Este repositório contém um sistema simples para gerenciar contas bancárias, incluindo a classe `ContaBanco`. O objetivo é demonstrar o uso de encapsulamento, atributos e métodos em PHP.

## Estrutura do Projeto

### Classe `ContaBanco`

A classe `ContaBanco` é responsável por gerenciar as operações de uma conta bancária.

#### Atributos

- **`numConta`**: Número da conta (público).
- **`tipoConta`**: Tipo da conta (corrente ou poupança) (protegido).
- **`saldo`**: Saldo atual da conta (privado).
- **`status`**: Indica se a conta está aberta ou fechada (privado).
- **`dono`**: Nome do proprietário da conta (privado).

#### Métodos

- **`__construct()`**: Construtor que inicializa o saldo como 0 e o status como falso (fechado).
  
- **`abrirConta($t)`**: Abre a conta e define o tipo (`CC` ou `CP`). Se a conta for corrente, inicia com R$50. Se for poupança, inicia com R$150.

- **`fecharConta()`**: Fecha a conta, mas apenas se não houver saldo positivo ou se a conta não estiver em débito.

- **`depositar($v)`**: Deposita um valor na conta se a conta estiver aberta.

- **`sacar($v)`**: Saca um valor da conta, verificando se o saldo é suficiente e se a conta está aberta.

- **`pagarMensalidade()`**: Deduz uma mensalidade da conta dependendo do tipo (R$12 para conta corrente e R$20 para conta poupança), se a conta estiver aberta.

- **Getters e Setters**: Métodos para acessar e modificar os atributos da conta, como `getNumConta()`, `setNumConta()`, `getTipoConta()`, `setTipoConta()`, entre outros.

## Exemplo de Uso

O exemplo a seguir demonstra como utilizar a classe `ContaBanco` para gerenciar contas bancárias.

1. **Inclusão de Classe**: O código começa incluindo a classe `ContaBanco`.

2. **Criação de Instâncias**:
   - Duas instâncias da classe `ContaBanco` são criadas: `$p1` e `$p2`.

3. **Abrindo Contas**:
   - `$p1` abre uma conta do tipo "CC" (Conta Corrente) e define o dono como "Railton" e o número da conta como 1000.
   - `$p2` abre uma conta do tipo "CP" (Conta Poupança) e define o dono como "Nathalia" e o número da conta como 2000.

4. **Realizando Depósitos**:
   - Um depósito de R$300 é feito na conta de Railton (`$p1`).
   - Um depósito de R$500 é feito na conta de Nathalia (`$p2`).

5. **Realizando Saques**:
   - Nathalia saca R$50 de sua conta.

6. **Pagando Mensalidades**:
   - Mensalidades são pagas para ambas as contas, que variam dependendo do tipo de conta.

7. **Fechando Contas**:
   - Ambas as contas são fechadas. O código verifica se a conta pode ser fechada com base no saldo.

8. **Exibindo Dados**:
   - Os dados de cada conta são exibidos usando a função `print_r()`, que imprime as informações de cada objeto, mostrando todos os atributos definidos.

Esse exemplo ilustra como criar contas, realizar depósitos e saques, pagar mensalidades e fechar contas, demonstrando o uso prático da classe `ContaBanco`.

## Autor

**Feito por Railton Araujo.**
