export function PreviewFiles() {

    const preview = document.querySelector("#preview");
    const files = document.querySelector("input[type=file]").files;

    function readAndPreview(file) {
        // Make sure `file.name` matches our extensions criteria
        if (/\.(jp?g|png|gif)$/i.test(file.name)) {
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                    const image = new Image(100, 100);
                    image.title = file.name;
                    image.src = this.result;
                    preview.appendChild(image);
                },
                false
            );

            reader.readAsDataURL(file);
        }

        // FormDataFill();
    }

    if (files) {
        [].forEach.call(files, readAndPreview);
        // console.log(files)
    }
}


