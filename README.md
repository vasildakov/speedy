# speedy
speedy


## A successful Git branching model

1. Creating a feature branch

```
git checkout -b feature/the-feature-branch develop
git push --set-upstream origin feature/the-feature-branch
```

2. Incorporating a finished feature on develop

```
git checkout develop
git merge --no-ff feature/the-feature-branch
git branch -d feature/the-feature-branch
git push origin develop
```

3. Deleting a remote branch

```
git push origin -d feature/the-feature-branch
```