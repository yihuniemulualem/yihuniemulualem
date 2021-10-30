@include('layouts/main')
<!DOCTPE html>
<html>
<head>
<title>View tenders that are available</title>
<style>
    #button{
        border-radius:78px;
    }
</style>
</head>
<body>
<form method="GET" action="http://localhost:8000/toedit/{number}">
<table border = "1">
<tr>
<td>number</td>
<td>title</td>
<td>organization</td>
<td>opendate</td>
<td>closeddate</td>
</tr>
<tr>
 <td> <input type="text" name="Tendernumber" placeholder="enter tender number"></td>
<td> <input type="text" name="TenderTitle" placeholder="enter your title"></td>
<td> <input type="text" name="organization" placeholder="enter your organization"></td>
<td> <input type="date" name="opendate" placeholder="enter your opendate"></td>
<td> <input type="date" name="closeddate" placeholder="enter your closeddate"></td>
</tr>
<tr><td colspan="3" id="button" class="btn btn-success"><input type="submit" value="submit">
<input type="reset" value="reset"></td></tr>
</table>
</form>
</body>
</html>
