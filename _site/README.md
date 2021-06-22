Edit the Fatima Fellowship website website by pulling this repository and creating pull requests as explained below.

# Setup

1. Clone this repo. Run `git clone https://github.com/abidlabs/fatima`
2. Make changes as described in sections below.
3. *(optional)* Test website changes locally by running `python3 -m http.server` at the top level folder of the cloned repo.
4. Create a pull request to integrate changes.

# Add / Edit Mentor

1. Add profile image to img/mentors/ folder. Use first_last.[jpg/png] format. 
2. Open "mentors.json".
3. Add item to list with following properties:
    - name (full name)
    - email
    - education
    - about (2-3 sentences)
    - site (personal site / linkedin)
    - image (name of saved profile image)

# Add / Edit Fellow

1. Add profile image to img/fellows/ folder. Use first_last.[jpg/png] format. 
2. Open "fellows.json".
3. Add item to list with following properties:
    - name (full name)
    - email
    - education
    - about (2-3 sentences)
    - site (personal site / linkedin)
    - image (name of saved profile image)
    - mentor (full name of mentor. should match name used in mentors.json)

# Add / Edit Blog Post

1. Copy blogs/template folder as new folder in blog directory, e.g. blog/deep_learning
2. Edit index.html file in the copied folder. Store any linked media (images, css, etc.) within this folder.
3. Edit "blogs.json" with the following properties:
    - folder (name of folder created)
    - date created (MM/DD/YYYY)
    - title
    - summary (2 sentences)
    - authors (list of full names of fellow or mentor. should match names used in mentors.json or fellows.json)