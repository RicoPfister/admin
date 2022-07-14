function AddFiles(event) {
    for (var i = 0, files = event.target.files; i < files.length; i++) {
        data.append(files[i].name, files[i])
    }

    form.documents = data
}
