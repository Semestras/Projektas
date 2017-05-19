# Semester project for DataDog

We have been asked to create a simple web page in which anyone can save their tasks.

# Know issues

1. No design
+ Task creation form
2. No task editing/deletion after they are created
3. Currently no state changing for available tasks
4. No automatic state changing to "Late"
6. No roles for users, no limitations of pages available for accesing
7. /create doesn't post a valid argument to the database, always set to default


**All the issues are going to be fixed, now that we are aware of them**

# Setting up the project

After donwloading the repository, you will have to run
1. Composer

To get all required project files.

2. Setup /app/config/parameters.yml file

To be able to use a local database to test the functions

3. run php bin/console doctrine:database:create
4. run php bin/console doctrine:schema:update --force --complete
5. run php bin/console server:start

To run a test server and view the project


