# Git

### Windows

1. Download the latest version of [Git](https://git-scm.com/download/win).
2. Run the installer and follow the steps.
3. Open the command prompt and run the following command to verify that Git was installed correctly:
    ```bash
    git --version
    ```

### Linux

1. Open the terminal and run the following command:
    ```bash
    sudo apt install git-all
    ```
2. Open the terminal and run the following command to verify that Git was installed correctly:
    ```bash
    git --version
    ```
   
### MacOS

1. Download the latest version of [Git](https://git-scm.com/download/mac).
2. Run the installer and follow the steps.
3. Open the terminal and run the following command to verify that Git was installed correctly:
    ```bash
    git --version
    ```

   
### Configuring Git

1. Configure your username and email:
    ```bash
    git config --global user.name "Your Name"
    git config --global user.email "your_email@example.com"
    ```
2. Check your configuration:
    ```bash
    git config --list
    ```
   
### SSH keys

#### Generating a new SSH key

1. Open the command prompt and run the following command:
    ```bash
    ssh-keygen -t ed25519 -C "your_email@example.com"
    ```
2. Press Enter to accept the default file location and file name.
3. Enter a secure passphrase.

#### Adding your SSH key to the ssh-agent

1. Copy the SSH public key to the clipboard:
    ```bash
    clip < ~/.ssh/id_ed25519.pub
    ```
2. Go to [GitHub](https://github.com/settings/keys) and add the SSH key to your account.
3. Open Git Bash and run the following command:
    ```bash
    ssh -T git@github.com
    ```
4. Verify that the fingerprint matches the one displayed on GitHub.
5. Enter the passphrase.
6. If you see the following message, you are ready to clone repositories using SSH:
    ```bash
    Hi username! You've successfully authenticated, but GitHub does not provide shell access.
    ```

### Cloning the repository

1. Open the command prompt and run the following command:
    ```bash
    git clone repo_url
    ```
2. Open your project:
    ```bash
    cd repo_name
    ```