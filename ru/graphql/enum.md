# Enum

Перечисления являются особым видом скаляров, который ограничен 
определённым набором допустимых значений. в этом случае мы можем 
быть уверенным в том, что любой аргумент этого типа является одним 
из допустимых значений.

Вот как может выглядеть определение перечисления на языке схемы GraphQL:

```graphql
enum Colour {
    RED
    GREEN
    BLUE
}
```

Это означает, что везде, где мы используем тип Colour в нашей схеме, 
мы ожидаем, что он будет точно одним из допустимых значений:
`RED`, `GREEN` или `BLUE`.
