function TreeComposite(id, name, total, level, last) {

	var root = document.createDocumentFragment();

	var panel = document.createElement("div");
	panel.setAttribute("class", (last ? "tree-folder last" : "tree-folder"));
	var b = document.createElement("b");
	var i = document.createElement("i");

	var link = document.createElement("a");
	link.setAttribute("class", "folder");
	link.href = "#";
	link.innerHTML = name + "[" + total + "]";
	link.id = id;

	var child = document.createElement("div");
	child.setAttribute("class", "tree-child");

	if (level) {
		panel.appendChild(i);
	}
	panel.appendChild(b);
	panel.appendChild(link);
	root.appendChild(panel);
	root.appendChild(child);

	this.child = child;
	this.element = root;

}
TreeComposite.prototype = {

	addNode: function (treeNode) {
		this.child.appendChild(treeNode.getElement());

	},
	getElement: function () {
		return this.element;
	}

}