# Ⓐ ARES integration

do Latte šablony stačí dát:

```latte
{include '../../../vendor/liquiddesign/ares/src/ares.latte', aresEndpointUrl: $presenter->link('loadAres!')}

<button
type="button"
role="button"
class="btn btn-gray w-100 w-md-auto load-ares-by-ic"
data-ic-input="{$form['ic']->getHtmlId()}"
data-dic-input="{$form['dic']->getHtmlId()}"
data-name-input="{$form['company']->getHtmlId()}"
data-street-input="{$form['billAddress']['street']->getHtmlId()}"
data-city-input="{$form['billAddress']['city']->getHtmlId()}"
data-zip-input="{$form['billAddress']['zipcode']->getHtmlId()}"
>
    {_'userRegister.icFillCompanyInfo','Vyplnit údaje podle IČ'}
</button>