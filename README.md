# PDF samples

A collection of samples to use for testing conforming readers

## Metadata about these files

To compare parsed results with actual information from these files, there is a `files.json` included in this repository. It has an array for each file, that contains information about the documents.

### File

| key              | value                        | Type          |
|------------------|------------------------------|---------------|
| filename         | The path to the file         | string        |
| password         | Password to open the file    | string \|null |
| version          | PDF version                  | string        |
| title            | Title                        | string \|null |
| producer         | Producer                     | string \|null |
| author           | Author                       | string \|null |
| creator          | Creator                      | string \|null |
| creationDate     | Creation date                | string \|null |
| modificationDate | Modification date            | string \|null |
| pages            | An array of page information | object        |

### Page

| key     | value                | Type   |
|---------|----------------------|--------|
| content | text content of page | string |
