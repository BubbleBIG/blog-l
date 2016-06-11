function InputCheck1(AddbForm)
{
    if (AddForm.title.value == "")
    {
        alert("标题不能为空!");
        AddForm.title.focus();
        return (false);
    }
    if (AddForm.edit.value == "")
    {
        alert("内容不能为空!");
        AddForm.edit.focus();
        return (false);
    }
}