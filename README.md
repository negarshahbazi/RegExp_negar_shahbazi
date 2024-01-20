# RejExp

***Qu'est-ce qu'une expression régulière ?❤***
Une expression régulière est une séquence de caractères qui forme un modèle de recherche. Lorsque vous recherchez des données dans un texte, vous pouvez utiliser ce modèle de recherche pour décrire ce que vous recherchez.

Une expression régulière peut être un caractère unique ou un modèle plus compliqué.

Les expressions régulières peuvent être utilisées pour effectuer tous les types d’opérations de recherche de texte et de remplacement de texte.

# Utiliser preg_match()⭐

**La fonction preg_match() vous dira si une chaîne contient des correspondances d'un modèle.**

```php
$str = "j'adore PHP";
$pattern = "/Adore/i";
echo preg_match($pattern, $str);//1
```

# Utiliser preg_match_all()⭐

La fonction preg_match_all() vous indiquera combien de correspondances ont été trouvées pour un modèle dans une chaîne.

```php
$str = "le ver vert va VERS le verre.";

$pattern = "/ver/i";

echo preg_match_all($pattern, $str); // Outputs 4
```

# Utilisez preg_replace()⭐

La fonction preg_replace() remplacera toutes les correspondances de modèles dans une chaîne par une autre chaîne.

```jsx
$str = "POO c'est très facile!";

$pattern = "/facile/i";

echo preg_replace($pattern, "difficile", $str); // Outputs "Visit W3Schools!"
```

# Regular Expression Patterns⭐

**Les parenthèses sont utilisées pour rechercher une plage de caractères :**

| Expression | Description |
| --- | --- |
| [abc] | Trouvez un caractère parmi les options entre parenthèses |
| [^abc] | Trouvez n'importe quel caractère PAS entre parenthèses |
| [0-9] | Trouvez un caractère compris entre 0 et 9 |

# Metacharacters⭐

**Les métacaractères sont des caractères ayant une signification particulière :**

| Metacharacter | Description |
| --- | --- |
| | | Trouvez une correspondance pour l'un des modèles séparés par | comme dans : chat|chien|poisson |
| . | Trouver une seule instance de n'importe quel personnage |
| ^ | Recherche une correspondance au début d'une chaîne comme dans : ^Bonjour |
| $ | Recherche une correspondance à la fin de la chaîne comme dans : World$ |
| \d | Trouver un chiffre |
| \s | Trouver un caractère d'espacement |
| \b | Recherchez une correspondance au début d'un mot comme celui-ci : \bWORD, ou à la fin d'un mot comme celui-ci : WORD\b |
| \uxxxx | Recherchez le caractère Unicode spécifié par le nombre hexadécimal xxxx |

# Quantifiers⭐

**Les quantificateurs définissent des quantités :**

| Quantifier | Description |
| --- | --- |
| n+ | Correspond à toute chaîne contenant au moins un n |
| n* | Correspond à n'importe quelle chaîne contenant zéro ou plusieurs occurrences de n |
| n? | Correspond à toute chaîne contenant zéro ou une occurrence de n |
| n{x} | Correspond à n'importe quelle chaîne contenant une séquence de X n |
| n{x,y} | Correspond à n'importe quelle chaîne contenant une séquence de X à Y n |
| n{x,} | Correspond à toute chaîne contenant une séquence d'au moins X n |

# PHP - Validate Name⭐

**Le code ci-dessous montre un moyen simple de vérifier si le champ de nom ne contient que des lettres, des tirets, des apostrophes et des espaces blancs. Si la valeur du champ nom n'est pas valide, stockez un message d'erreur :**

```jsx
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) { 
 $nameErr = "Only letters and white space allowed";}
```

# PHP - Validate E-mail⭐

# Le moyen le plus simple et le plus sûr de vérifier si une adresse e-mail est bien formée est d'utiliser la fonction filter_var() de PHP.
Dans le code ci-dessous, si l'adresse e-mail n'est pas bien formée, stockez un message d'erreur :

$email = test_input($_POST["email"]);if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  $emailErr = "Invalid email format";}
