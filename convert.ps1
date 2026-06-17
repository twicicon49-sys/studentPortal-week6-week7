$word = New-Object -ComObject Word.Application
$word.Visible = $false
$doc = $word.Documents.Open("C:\xampp\htdocs\StudentPortal\logbook.doc")
$doc.SaveAs([ref]"C:\xampp\htdocs\StudentPortal\logbook.docx", [ref]16)
$doc.Close()
$word.Quit()
