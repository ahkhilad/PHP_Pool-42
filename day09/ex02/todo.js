var tab = [];
var index = 0;
var check = 0;
function ft_todo(elem)
{
  var todo;
  if (check == 0)
  {
    todo = prompt("Please fill in a new TO DO !");
  }
  else {
    todo = elem;
  }
  if (todo)
  {
    var list = document.getElementById("ft_list");
    var newitem = document.createElement("DIV");
    newitem.setAttribute("class", "new_elem");
    newitem.setAttribute("onclick", "delete_it(this)");
    newitem.setAttribute("index", index);
    var textnode = document.createTextNode(todo);
    tab[index] = todo;
    index++;
    newitem.appendChild(textnode);
    list.insertBefore(newitem, list.childNodes[0]);
    if (check == 0)
    {
      update_cookies();
    }
  }
}
function delete_it(obj)
{
  if (confirm("Do you really want to delete this task ?") == true)
  {
    var ind = obj.getAttribute("index");
    tab.splice(ind, 1);
    obj.parentNode.removeChild(obj);
    update_cookies();
  }
}
function update_cookies()
{
  var myJSON = JSON.stringify(tab);
  document.cookie = "todos="+myJSON;
}
window.onload = function()
{
  if (document.cookie)
  {
    check = 1;
    var cook = document.cookie;
    var newtab = cook.split("=");
    var test = JSON.parse(newtab[1]);
    for (elem in test)
    {
      ft_todo(test[elem]);
    }
    check = 0;
  }
}