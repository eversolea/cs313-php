
set /p input= Commit Message:

git add .
git commit -m %INPUT%
git push heroku
pause