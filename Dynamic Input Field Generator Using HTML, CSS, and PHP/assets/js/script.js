var fieldId = 0;

function addElement(parentId, elementTag, elementId, html){
	var id = document.getElementById(parentId);
	var newElement = document.createElement(elementTag);
	newElement.setAttribute('id', elementId);
	newElement.innerHTML = html;
	id.appendChild(newElement);

}

function removeField(elementId){
	var fieldId = "field-"+elementId;
	var element = document.getElementById(fieldId);
	element.parentNode.removeChild(element);
}

function addField(){
	fieldId++;
	var html= '<div class="d-flex gap-2 mt-3"><input type="text" class="form-control" placeholder="Enter text here..." name="person[]">' + '<button class="btn btn-sm btn-danger" onclick="removeField('+fieldId+');"><span class="fa fa-minus"></span></button></div>';
	addElement('forms', 'div', 'field-'+ fieldId, html);
}