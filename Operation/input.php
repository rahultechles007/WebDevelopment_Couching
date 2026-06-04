<H1>mathematical operation </H1>
<form action="output.php" method="get" >
<label>Num1:</label><input type="text" name="num1" value=""/><br><br>
<label>Num2:</label><input type="text" name="num2" value=""/><br><br>

<label style="display:inline-block">Operation
</label>
<input type="radio" name="solve" value="+">ADD 
<input type="radio" name="solve" value="-">SUB
<input type="radio" name="solve" value="*">MUL
<input type="radio" name="solve" value="/">DIV <br><br>
<label>&nbsp;</label><input type="submit" name="sub"/>
</form>
<style>
    label {
        width: 90px;
        line-height: 10px;
        display: inline-block;
    }
</style>