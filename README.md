# PDF samples

This repository is a collection of PDF files together with structured data about their contents in YAML form.

## Objective of this repository

The objective of this repository is two-fold:

- Provide a variety of PDF files by different generators for testing/benchmarking purposes.
- Provide structured data about the contents of those files to test output of conforming parsers.

## File organization

The samples are organized in subdirectories by generator as follows:

- `generator-name`
  - `sample-description`
    - `file.pdf`
    - `contents.yml`
    - `images` (optional)
      - `page_0_image_0.png` (page number and index of image on page, file extension based on image type)

### Contents.yml

The contents.yml file contains structured data about the contents of the PDF file. The schema is defined in `yml-schema.json` in the root of this repository.

Properties can be added but not removed or renamed between minor versions to preserve BC.
