<p align="center">
    <h1 align="center">Prueba Técnica autopartes</h1>
    <br>
</p>

Prueba técnica rest yii2, esta prueba contiene rest completo para entidad autos y 3 métodos rest para la entidad partes.
<p>
    <h2> Endpoints entidad autos</h2>
    <br>


<ul>
<li><code>GET /autos</code>: lista de todos los autos página a página;</li>
<li><code>HEAD /autos</code>: muestra ĺa información resumén del auto listado;</li>
<li><code>POST /autos</code>: crea un nuevo auto;</li>
<li><code>GET /autos/123</code>: devuelve los detalles del auto 123;</li>
<li><code>HEAD /autos/123</code>: muestra la información resúmen del auto 123;</li>
<li><code>PATCH /autos/123</code> y <code>PUT /autos/123</code>: actualizan al auto 123;</li>
<li><code>DELETE /autos/123</code>: borra el auto 123;</li>
<li><code>OPTIONS /autos</code>: muestra los verbos soportados de acuerdo al punto final <code>/autos</code>;</li>
<li><code>OPTIONS /autos/123</code>: muestra los verbos soportados de acuerdo al punto final <code>/autos/123</code>.</li>
</ul>

<p>
    <h2> Endpoints entidad partes</h2>
    <br>
</p>

<ul>
<li><code>GET /partes</code>: lista de todos las partes página a página;</li>
<li><code>GET /partes/123</code>: devuelve los detalles de la parte 123;</li>
<li><code>POST auto/{auto_id}/partes: crea un nuevo parte;</li>
</ul>