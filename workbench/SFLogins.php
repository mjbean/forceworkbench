<?php
require_once 'session.php';
require_once 'shared.php';
require_once 'header.php';
?>

<style>
table, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>

<form>
  <table style="width:100%">
  <h4>RelationEdge Projects</h1>
  <tr>
    <td><input type="button" value="Login" onclick="window.open('https://www.salesforce.com/login.jsp?un=relationedgeatlanta@gmail.com&pw=Atlanta12345')"/>     RelationEdge Prod</td>
    <td><input type="button" value="Login" onclick="window.open('https://test.salesforce.com/login.jsp?un=jrichards@relationedge.dev1.com&pw=REPassword1')"/>     RelationEdge Sandbox</td>
  </tr>
  </table>
</form>
