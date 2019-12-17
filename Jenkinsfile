
timeout(time: 15, unit: 'MINUTES') {
    node {
       stage('Git SCM') {
           checkout scm
       }
       stage('Build') {
           sh "openapi-generator generate -i https://dev-api.egoiapp.com/openapi -g php -o . -c configPhp.json"

           sh "rm -rf target/"
       }
       stage('Deploy') {
           def props = readJSON file: './configPhp.json'
           echo props['artifactVersion']
           
           sh "ls"
           sh "git status"
           sh "git add ."
           sh "git commit -am \"Version:  ${props['artifactVersion']}\""
           sh 'git push'
           sh "git tag ${props['artifactVersion']}"
           sh 'git push --tags'
       }
       stage('SonarQube analysis') {
           withSonarQubeEnv('E-Goi SonarQube') {
             sh "/usr/bin/sonar-scanner"
           }
       }
   }
}
