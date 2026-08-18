#### **Installing phpn using powershell**
- Open windows powershell and run it as an administrator.
- Run the following command:
```shell
powershell -c "& ([ScriptBlock]::Create((irm 'https://www.php.net/include/download-instructions/windows.ps1'))) -Version 8.5"
```
- Or use the other command:
```shell
winget install PHP.PHP
```
- Check using the following command:
```shell
php --version
```

#### **Installing composer package manager**
- Download the composer from the following url:https://getcomposer.org/download/
- 

#### **Installing php extension for vs code**
- PHP Intellisense (must)
- PHP DocBlocker (optional)
- PHP Sniffer & Beautifier (optional)
- PHP Debug

#### **Installing git for version control**
- Download git from the following url: https://git-scm.com/
- Setup the global config variables:
```bash
git config --global user.name 'Your Github Username'
git config --global user.email 'Your Github Email'
```
- View global git settings:
```bash
git config --global --list
```
- Generate the one time personal access token from github settings.
- Try to push dummy code.

#### **Reference Notes** 
- https://www.phptutorial.net/

#### **Reference Books**
- ![PHP Book](https://github.com/manjunath5496/PHP-Programming-Books/blob/master/php(14).pdf)
- ![System Design](https://github.com/aasthas2022/SDE-Interview-and-Prep-Roadmap/blob/main/System%20Design/Resources/System%20Design%20Interview%20by%20Alex%20Xu.pdf)